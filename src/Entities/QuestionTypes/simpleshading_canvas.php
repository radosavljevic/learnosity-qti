<?php

namespace LearnosityQti\Entities\QuestionTypes;

use LearnosityQti\Entities\BaseQuestionTypeAttribute;

/**
* This class is auto-generated based on Schemas API and you should not modify its content
* Metadata: {"responses":"v2.108.0","feedback":"v2.71.0","features":"v2.107.0"}
*/
class simpleshading_canvas extends BaseQuestionTypeAttribute {
    protected $row_count;
    protected $column_count;
    protected $cell_height;
    protected $cell_width;
    protected $shaded;
    protected $read_only_author_cells;
    protected $hidden;
    protected $img_src;
    
    public function __construct(
            )
    {
            }

    /**
    * Get Row count \
    * Number of rows \
    * @return number $row_count \
    */
    public function get_row_count() {
        return $this->row_count;
    }

    /**
    * Set Row count \
    * Number of rows \
    * @param number $row_count \
    */
    public function set_row_count ($row_count) {
        $this->row_count = $row_count;
    }

    /**
    * Get Column count \
    * Number of columns \
    * @return number $column_count \
    */
    public function get_column_count() {
        return $this->column_count;
    }

    /**
    * Set Column count \
    * Number of columns \
    * @param number $column_count \
    */
    public function set_column_count ($column_count) {
        $this->column_count = $column_count;
    }

    /**
    * Get Cell height \
    * Cell height ratio, eg 1.0 - 40px, 1.5 - 60px. \
    * @return number $cell_height \
    */
    public function get_cell_height() {
        return $this->cell_height;
    }

    /**
    * Set Cell height \
    * Cell height ratio, eg 1.0 - 40px, 1.5 - 60px. \
    * @param number $cell_height \
    */
    public function set_cell_height ($cell_height) {
        $this->cell_height = $cell_height;
    }

    /**
    * Get Cell width \
    * Cell width ratio, eg 1.0 - 40px, 1.5 - 60px. \
    * @return number $cell_width \
    */
    public function get_cell_width() {
        return $this->cell_width;
    }

    /**
    * Set Cell width \
    * Cell width ratio, eg 1.0 - 40px, 1.5 - 60px. \
    * @param number $cell_width \
    */
    public function set_cell_width ($cell_width) {
        $this->cell_width = $cell_width;
    }

    /**
    * Get Shade cells \
    * Author shaded canvas \
    * @return array $shaded \
    */
    public function get_shaded() {
        return $this->shaded;
    }

    /**
    * Set Shade cells \
    * Author shaded canvas \
    * @param array $shaded \
    */
    public function set_shaded (array $shaded) {
        $this->shaded = $shaded;
    }

    /**
    * Get Lock shaded cells \
    * Prevents user from modifying Author Shaded \
    * @return boolean $read_only_author_cells \
    */
    public function get_read_only_author_cells() {
        return $this->read_only_author_cells;
    }

    /**
    * Set Lock shaded cells \
    * Prevents user from modifying Author Shaded \
    * @param boolean $read_only_author_cells \
    */
    public function set_read_only_author_cells ($read_only_author_cells) {
        $this->read_only_author_cells = $read_only_author_cells;
    }

    /**
    * Get Hide cells \
    * Author hidden canvas \
    * @return array $hidden \
    */
    public function get_hidden() {
        return $this->hidden;
    }

    /**
    * Set Hide cells \
    * Author hidden canvas \
    * @param array $hidden \
    */
    public function set_hidden (array $hidden) {
        $this->hidden = $hidden;
    }

    /**
    * Get Shading image \
    * Shade with image \
    * @return string $img_src \
    */
    public function get_img_src() {
        return $this->img_src;
    }

    /**
    * Set Shading image \
    * Shade with image \
    * @param string $img_src \
    */
    public function set_img_src ($img_src) {
        $this->img_src = $img_src;
    }

    
}

