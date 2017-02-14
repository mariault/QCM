<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8ba2650ef42fc3b09181eb77307c1cfb45852d4bf25415254173987f3583b0b extends Twig_Template
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
        $__internal_7e56f03a30f335851055322751db201b56979c3219ac53fa457ad361b4e33aa9 = $this->env->getExtension("native_profiler");
        $__internal_7e56f03a30f335851055322751db201b56979c3219ac53fa457ad361b4e33aa9->enter($__internal_7e56f03a30f335851055322751db201b56979c3219ac53fa457ad361b4e33aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7e56f03a30f335851055322751db201b56979c3219ac53fa457ad361b4e33aa9->leave($__internal_7e56f03a30f335851055322751db201b56979c3219ac53fa457ad361b4e33aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
