<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0b7bbdb63ae288bc90f71f92ecea796001e670b0ccc0f1245bfde1ee449f0c8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d82787e01634b358ca77b334fb0f7d077266a5374a35f95eb97b6647cfbc9a1 = $this->env->getExtension("native_profiler");
        $__internal_0d82787e01634b358ca77b334fb0f7d077266a5374a35f95eb97b6647cfbc9a1->enter($__internal_0d82787e01634b358ca77b334fb0f7d077266a5374a35f95eb97b6647cfbc9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0d82787e01634b358ca77b334fb0f7d077266a5374a35f95eb97b6647cfbc9a1->leave($__internal_0d82787e01634b358ca77b334fb0f7d077266a5374a35f95eb97b6647cfbc9a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
