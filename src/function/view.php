<?php class view
{
    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }
    function web()
    {
        $sql = "SELECT * FROM com_info.web 
        INNER JOIN com_info.meta ON com_info.web.id_meta = com_info.meta.id_meta";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }

    function books_web()
    {
        $sql = "SELECT * FROM com_data.books 
        ORDER BY com_data.books.id_books DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
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

    function crud_log()
    {
        $sql = "SELECT * FROM com_log.log 
        INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member
        ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
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

    function read_log()
    {
        $sql = "SELECT * FROM com_log.log 
        INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member
        WHERE com_log.log.id_crud=2
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

    function delete_log()
    {
        $sql = "SELECT * FROM com_log.log 
        INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member
        WHERE com_log.log.id_crud=4
        ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }

    function member_log()
    {
        $sql = "SELECT * FROM com_user.member 
        INNER JOIN com_user.part ON com_user.member.id_part = com_user.part.id_part
        ORDER BY com_user.member.id_member DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }

    function order()
    {
        $sql = "SELECT * FROM com_data.books 
        ORDER BY com_data.books.id_books DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
}
