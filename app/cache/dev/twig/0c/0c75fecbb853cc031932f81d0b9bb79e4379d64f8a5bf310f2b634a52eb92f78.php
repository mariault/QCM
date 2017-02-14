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
        $__internal_e1124a730374c5b5645343d515818547649b8c5d355f62d65f7191d6856f4159 = $this->env->getExtension("native_profiler");
        $__internal_e1124a730374c5b5645343d515818547649b8c5d355f62d65f7191d6856f4159->enter($__internal_e1124a730374c5b5645343d515818547649b8c5d355f62d65f7191d6856f4159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e1124a730374c5b5645343d515818547649b8c5d355f62d65f7191d6856f4159->leave($__internal_e1124a730374c5b5645343d515818547649b8c5d355f62d65f7191d6856f4159_prof);

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
