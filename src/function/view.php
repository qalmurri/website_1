<?php class view
{
    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }
    function web()
    {
        $sql = "SELECT * FROM com_info.web INNER JOIN com_info.meta ON com_info.web.id_meta = com_info.meta.id_meta";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function books_web()
    {
        $sql = "SELECT * FROM com_data.books ORDER BY com_data.books.id_books DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function books_dashboard($id_books)
    {
        $sql = "SELECT * FROM com_data.books INNER JOIN com_data.completeness ON com_data.books.id_completeness = com_data.completeness.id_completeness INNER JOIN com_data.cover ON com_data.books.id_cover = com_data.cover.id_cover WHERE com_data.books.id_books=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_books));
        $query = $row->fetch();
        return $query;
    }
    function section($id_section)
    {
        $sql = "SELECT * FROM section WHERE id_section=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_section));
        $query = $row->fetch();
        return $query;
    }
    function setting($id_setting)
    {
        $sql = "SELECT * FROM setting WHERE id_setting=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_setting));
        $query = $row->fetch();
        return $query;
    }
    function member($id_member)
    {
        $sql = "SELECT * FROM member WHERE id_member=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_member));
        $query = $row->fetch();
        return $query;
    }

    function author_web()
    {
        $sql = "SELECT *
        FROM com_user.member
        WHERE com_user.member.id_part=5 
        ORDER BY com_user.member.name_member ASC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }

    function author($id_books)
    {
        $sql = "SELECT *
        FROM com_user.member
        WHERE com_user.member.id_part=5 
        AND NOT com_user.member.id_member IN (
            SELECT id_member
            FROM com_category.author
            WHERE com_category.author.id_books=$id_books)
        ORDER BY com_user.member.name_member ASC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function author_count($id_member)
    {
        $sql = "SELECT COUNT(com_category.author.id_books)
        FROM com_category.author
        WHERE com_category.author.id_member=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_member));
        $query = $row->fetch();
        return $query;
    }
    function author_book($id_books)
    {
        $sql = "SELECT * FROM com_category.author INNER JOIN com_user.member ON com_category.author.id_member = com_user.member.id_member WHERE id_books=? ORDER BY com_user.member.name_member ASC";
        $row = $this->db->prepare($sql);
        $row->execute(array($id_books));
        $query = $row->fetchAll();
        return $query;
    }
    function crud_log()
    {
        $sql = "SELECT * FROM com_log.log INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function create_log()
    {
        $sql = "SELECT * FROM com_log.log INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member WHERE com_log.log.id_crud=1 ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function read_log()
    {
        $sql = "SELECT * FROM com_log.log INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member WHERE com_log.log.id_crud=2 ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function update_log()
    {
        $sql = "SELECT * FROM com_log.log INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member WHERE com_log.log.id_crud=3 ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function delete_log()
    {
        $sql = "SELECT * FROM com_log.log INNER JOIN com_user.member ON com_log.log.id_member = com_user.member.id_member WHERE com_log.log.id_crud=4 ORDER BY com_log.log.id_log DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function member_log()
    {
        $sql = "SELECT * FROM com_user.member INNER JOIN com_user.part ON com_user.member.id_part = com_user.part.id_part ORDER BY com_user.member.id_member DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function author_log()
    {
        $sql = "SELECT * FROM com_user.member INNER JOIN com_user.part ON com_user.member.id_part = com_user.part.id_part WHERE com_user.member.id_part=5 ORDER BY com_user.member.id_member DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
    function order()
    {
        $sql = "SELECT * FROM com_data.books ORDER BY com_data.books.id_books DESC";
        $row = $this->db->prepare($sql);
        $row->execute();
        $query = $row->fetchAll();
        return $query;
    }
}
