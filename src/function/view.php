<?php class view
{
    protected $db;
    function __construct($db)
    {
        $this->db = $db;
    }

    function setting($id)
    {
        $sql = "SELECT *
		FROM setting
		where id_setting=?";
        $row = $this->db->prepare($sql);
        $row->execute(array($id));
        $query = $row->fetch();
        return $query;
    }
}
