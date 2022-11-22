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

    function create_log()
    {
        $sql = "SELECT * FROM com_log.log 
        INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member
        WHERE com_log.log.id_crud=1
        ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }

    function update_log()
    {
        $sql = "SELECT * FROM com_log.log 
        INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member
        WHERE com_log.log.id_crud=3
        ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
}
