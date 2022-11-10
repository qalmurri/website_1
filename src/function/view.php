<?php class view
{
    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }

    function section($id)
    {
        $sql = "SELECT name_section
		FROM section
		where id_section=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $query = $row->fetch();
        return $query;
    }
}
