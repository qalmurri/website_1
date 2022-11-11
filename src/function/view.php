<?php class view
{
    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }

    function section($id_section)
    {
        $sql = "SELECT *
		FROM section
		where id_section=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_section));
        $query = $row->fetch();
        return $query;
    }

    function setting($id_setting)
    {
        $sql = "SELECT *
		FROM setting
		where id_setting=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_setting));
        $query = $row->fetch();
        return $query;
    }

    function member($id_member)
    {
        $sql = "SELECT *
		FROM member
		where id_member=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_member));
        $query = $row->fetch();
        return $query;
    }
}
