<?php

namespace LearnosityQti\Entities\QuestionTypes;

use LearnosityQti\Entities\BaseQuestionType;

/**
* This class is auto-generated based on Schemas API and you should not modify its content
* Metadata: {"responses":"v2.108.0","feedback":"v2.71.0","features":"v2.107.0"}
*/
class numberlineplot extends BaseQuestionType {
    protected $is_math;
    protected $metadata;
    protected $stimulus;
    protected $stimulus_review;
    protected $instructor_stimulus;
    protected $type;
    protected $ui_style;
    protected $feedback_attempts;
    protected $instant_feedback;
    protected $validation;
    protected $title;
    protected $line;
    protected $ticks;
    protected $labels;
    protected $stacked;
    protected $stacked_elements;
    protected $toolbar;
    protected $points;
    
    public function __construct(
                    $type
                        )
    {
                $this->type = $type;
            }

    /**
    * Get Contains math \
    * Set to <strong>true</strong> to have LaTeX or MathML contents to be rendered with mathjax. \
    * @return boolean $is_math \
    */
    public function get_is_math() {
        return $this->is_math;
    }

    /**
    * Set Contains math \
    * Set to <strong>true</strong> to have LaTeX or MathML contents to be rendered with mathjax. \
    * @param boolean $is_math \
    */
    public function set_is_math ($is_math) {
        $this->is_math = $is_math;
    }

    /**
    * Get metadata \
    *  \
    * @return numberlineplot_metadata $metadata \
    */
    public function get_metadata() {
        return $this->metadata;
    }

    /**
    * Set metadata \
    *  \
    * @param numberlineplot_metadata $metadata \
    */
    public function set_metadata (numberlineplot_metadata $metadata) {
        $this->metadata = $metadata;
    }

    /**
    * Get Stimulus \
    * The question stimulus. Can include text, tables, images. \
    * @return string $stimulus \
    */
    public function get_stimulus() {
        return $this->stimulus;
    }

    /**
    * Set Stimulus \
    * The question stimulus. Can include text, tables, images. \
    * @param string $stimulus \
    */
    public function set_stimulus ($stimulus) {
        $this->stimulus = $stimulus;
    }

    /**
    * Get Stimulus (review only) \
    * <a data-toggle="modal" href="#supportedTags">HTML</a>/Text content displayed <strong>only</strong> in review state rende
	red <strong>above</strong> the response area. Supports embedded <a href="http://docs.learnosity.com/questionsapi/feature
	types.php" target="_blank">Feature &lt;span&gt; tags</a>. Will override stimulus in review state. \
    * @return string $stimulus_review \
    */
    public function get_stimulus_review() {
        return $this->stimulus_review;
    }

    /**
    * Set Stimulus (review only) \
    * <a data-toggle="modal" href="#supportedTags">HTML</a>/Text content displayed <strong>only</strong> in review state rende
	red <strong>above</strong> the response area. Supports embedded <a href="http://docs.learnosity.com/questionsapi/feature
	types.php" target="_blank">Feature &lt;span&gt; tags</a>. Will override stimulus in review state. \
    * @param string $stimulus_review \
    */
    public function set_stimulus_review ($stimulus_review) {
        $this->stimulus_review = $stimulus_review;
    }

    /**
    * Get Instructor stimulus \
    * <a data-toggle="modal" href="#supportedTags">HTML</a>/Text content displayed when <code>showInstructorStimulus</code> is
	 set to <code>true</code> on the activity. Supports embedded <a href="http://docs.learnosity.com/questionsapi/featuretyp
	es.php" target="_blank">Feature &lt;span&gt; tags</a>. \
    * @return string $instructor_stimulus \
    */
    public function get_instructor_stimulus() {
        return $this->instructor_stimulus;
    }

    /**
    * Set Instructor stimulus \
    * <a data-toggle="modal" href="#supportedTags">HTML</a>/Text content displayed when <code>showInstructorStimulus</code> is
	 set to <code>true</code> on the activity. Supports embedded <a href="http://docs.learnosity.com/questionsapi/featuretyp
	es.php" target="_blank">Feature &lt;span&gt; tags</a>. \
    * @param string $instructor_stimulus \
    */
    public function set_instructor_stimulus ($instructor_stimulus) {
        $this->instructor_stimulus = $instructor_stimulus;
    }

    /**
    * Get Question type \
    *  \
    * @return string $type \
    */
    public function get_type() {
        return $this->type;
    }

    /**
    * Set Question type \
    *  \
    * @param string $type \
    */
    public function set_type ($type) {
        $this->type = $type;
    }

    /**
    * Get ui_style \
    *  \
    * @return numberlineplot_ui_style $ui_style \
    */
    public function get_ui_style() {
        return $this->ui_style;
    }

    /**
    * Set ui_style \
    *  \
    * @param numberlineplot_ui_style $ui_style \
    */
    public function set_ui_style (numberlineplot_ui_style $ui_style) {
        $this->ui_style = $ui_style;
    }

    /**
    * Get Check answer attempts \
    * If instant_feedback is true, this field determines how many times the user can click on the 'Check Answer' button. 0 mea
	ns unlimited. \
    * @return number $feedback_attempts \
    */
    public function get_feedback_attempts() {
        return $this->feedback_attempts;
    }

    /**
    * Set Check answer attempts \
    * If instant_feedback is true, this field determines how many times the user can click on the 'Check Answer' button. 0 mea
	ns unlimited. \
    * @param number $feedback_attempts \
    */
    public function set_feedback_attempts ($feedback_attempts) {
        $this->feedback_attempts = $feedback_attempts;
    }

    /**
    * Get Provide instant feedback \
    * Flag to determine whether to display a 'Check Answer' button to provide instant feedback to the user. \
    * @return boolean $instant_feedback \
    */
    public function get_instant_feedback() {
        return $this->instant_feedback;
    }

    /**
    * Set Provide instant feedback \
    * Flag to determine whether to display a 'Check Answer' button to provide instant feedback to the user. \
    * @param boolean $instant_feedback \
    */
    public function set_instant_feedback ($instant_feedback) {
        $this->instant_feedback = $instant_feedback;
    }

    /**
    * Get Set correct answer(s) \
    * In this section, configure the correct answer(s) for the question. \
    * @return numberlineplot_validation $validation \
    */
    public function get_validation() {
        return $this->validation;
    }

    /**
    * Set Set correct answer(s) \
    * In this section, configure the correct answer(s) for the question. \
    * @param numberlineplot_validation $validation \
    */
    public function set_validation (numberlineplot_validation $validation) {
        $this->validation = $validation;
    }

    /**
    * Get Title \
    * Response area title \
    * @return string $title \
    */
    public function get_title() {
        return $this->title;
    }

    /**
    * Set Title \
    * Response area title \
    * @param string $title \
    */
    public function set_title ($title) {
        $this->title = $title;
    }

    /**
    * Get Line \
    *  \
    * @return numberlineplot_line $line \
    */
    public function get_line() {
        return $this->line;
    }

    /**
    * Set Line \
    *  \
    * @param numberlineplot_line $line \
    */
    public function set_line (numberlineplot_line $line) {
        $this->line = $line;
    }

    /**
    * Get Ticks \
    *  \
    * @return numberlineplot_ticks $ticks \
    */
    public function get_ticks() {
        return $this->ticks;
    }

    /**
    * Set Ticks \
    *  \
    * @param numberlineplot_ticks $ticks \
    */
    public function set_ticks (numberlineplot_ticks $ticks) {
        $this->ticks = $ticks;
    }

    /**
    * Get Labels \
    *  \
    * @return numberlineplot_labels $labels \
    */
    public function get_labels() {
        return $this->labels;
    }

    /**
    * Set Labels \
    *  \
    * @param numberlineplot_labels $labels \
    */
    public function set_labels (numberlineplot_labels $labels) {
        $this->labels = $labels;
    }

    /**
    * Get Stack responses \
    * Whether responses should be stacked, or plotted on the line \
    * @return boolean $stacked \
    */
    public function get_stacked() {
        return $this->stacked;
    }

    /**
    * Set Stack responses \
    * Whether responses should be stacked, or plotted on the line \
    * @param boolean $stacked \
    */
    public function set_stacked ($stacked) {
        $this->stacked = $stacked;
    }

    /**
    * Get Number of responses allowed \
    * Number of elements/responses user can add to the number line \
    * @return number $stacked_elements \
    */
    public function get_stacked_elements() {
        return $this->stacked_elements;
    }

    /**
    * Set Number of responses allowed \
    * Number of elements/responses user can add to the number line \
    * @param number $stacked_elements \
    */
    public function set_stacked_elements ($stacked_elements) {
        $this->stacked_elements = $stacked_elements;
    }

    /**
    * Get Tools \
    * Allows you to choose toolbar buttons. By default all are available \
    * @return array $toolbar \
    */
    public function get_toolbar() {
        return $this->toolbar;
    }

    /**
    * Set Tools \
    * Allows you to choose toolbar buttons. By default all are available \
    * @param array $toolbar \
    */
    public function set_toolbar (array $toolbar) {
        $this->toolbar = $toolbar;
    }

    /**
    * Get Display specific points \
    * Specific point at which labels need to be drawn. Separate values by commas, eg: -2.5, 2.5 \
    * @return string $points \
    */
    public function get_points() {
        return $this->points;
    }

    /**
    * Set Display specific points \
    * Specific point at which labels need to be drawn. Separate values by commas, eg: -2.5, 2.5 \
    * @param string $points \
    */
    public function set_points ($points) {
        $this->points = $points;
    }

    
    public function get_widget_type() {
    return 'response';
    }
}

