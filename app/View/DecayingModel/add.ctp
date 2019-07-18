<div class="form">
<?php echo $this->Form->create('DecayingModel');?>
    <fieldset>
        <legend><?php echo Inflector::humanize($action) . __(' Decaying Model');?></legend>
    <?php
        echo $this->Form->input('name', array(
        ));
        echo $this->Form->input('description', array(
        ));
        echo $this->Form->input('DecayingModel.parameters.tau', array(
            'label' => __('Tau parameter'),
            'type' => 'number',
            'min' => 0,
            'title' => _('The end of life of the indicator'),
            'class' => 'form-control span6',
            'div' => 'input clear',
            'value' => isset($this->request->data['DecayingModel']['parameters']['tau']) ? $this->request->data['DecayingModel']['parameters']['tau'] : ''
        ));
        echo $this->Form->input('DecayingModel.parameters.delta', array(
            'label' => __('Delta parameter'),
            'type' => 'number',
            'min' => 0,
            'step' => 0.01,
            'title' => _('The decay speed of the indicator'),
            'class' => 'form-control span6',
            'div' => 'input clear',
            'value' => isset($this->request->data['DecayingModel']['parameters']['delta']) ? $this->request->data['DecayingModel']['parameters']['delta'] : ''
        ));
        echo $this->Form->input('DecayingModel.parameters.threshold', array(
            'label' => __('Threshold parameter'),
            'type' => 'number',
            'min' => 0,
            'title' => _('The model threshold of the indicator'),
            'class' => 'form-control span6',
            'div' => 'input clear',
            'value' => isset($this->request->data['DecayingModel']['parameters']['threshold']) ? $this->request->data['DecayingModel']['parameters']['threshold'] : ''
        ));
        echo $this->Form->input('DecayingModel.parameters.default_base_score', array(
            'label' => __('Default base_score parameter'),
            'type' => 'number',
            'min' => 0,
            'title' => _('The model default base_score of the indicator'),
            'class' => 'form-control span6',
            'div' => 'input clear',
            'value' => isset($this->request->data['DecayingModel']['parameters']['default_base_score']) ? $this->request->data['DecayingModel']['parameters']['default_base_score'] : ''
        ));
        echo '<div class="clear"></div>';
        echo '<label for="DecayingModelParametersBaseScoreConfig">' . __('Base Score configuration') . '</label>';
        echo $this->Form->textarea('DecayingModel.parameters.base_score_config', array(
            'class' => 'form-control span6',
            'cols' => '10',
            'value' => isset($this->request->data['DecayingModel']['parameters']['base_score_config']) ? json_encode($this->request->data['DecayingModel']['parameters']['base_score_config']) : ''
        ));
    ?>
        <div class="clear"></div>
    </fieldset>
<?php
    echo $this->Form->button(Inflector::humanize($action), array('class' => 'btn btn-primary'));
    echo $this->Form->end();
?>
</div>
<?php
    echo $this->element('/genericElements/SideMenu/side_menu', array('menuList' => 'decayingModel', 'menuItem' => 'add'));
?>
