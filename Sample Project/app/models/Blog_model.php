<?php
class Blog_model extends Model 
{
    public function insert_blog($title, $content)
    {
        $data = array(
            // Table's Column Name    =>    Value from the Form
            'title'                 => $title,
            'content'               => $content
        );

        return $this->db->table('blog')->insert($data);
    }

    public function get_all_blogs()
    {
        $data = $this->db->table('blog')->get_all();
        return $data;
    }

    public function get_a_blog($id)
    {
        $data = $this->db->table('blog')->where('id', $id)->get();
        return $data;
    }

    // public function update_blog($id, $title, $content)
    // {
    //     $data = array(
    //         'title'    => $title,
    //         'content'  => $content
    //     );
        
    //     $this->db->table('blog')->where('id', $id)->update($data);
    // }

}