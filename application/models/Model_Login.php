<?php

class Model_Login extends CI_Model
{
    private $_table = "user_tbl";

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = md5($post["password"], $user->password);

            // jika password benar
            if ($isPasswordTrue) {
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->id);
                return true;
            }
        }

        // login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET create_at=now() WHERE id={$user_id}";
        $this->db->query($sql);
    }
}
