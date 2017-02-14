<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cbdd4cab791ed1d76f034a25926f222ff603c3418af8a0c0266239c7388aa7be extends Twig_Template
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
        $__internal_99e660a02e7f2222b23a72dc168c52ef93aac928da289a3dcac8f9965f47d124 = $this->env->getExtension("native_profiler");
        $__internal_99e660a02e7f2222b23a72dc168c52ef93aac928da289a3dcac8f9965f47d124->enter($__internal_99e660a02e7f2222b23a72dc168c52ef93aac928da289a3dcac8f9965f47d124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99e660a02e7f2222b23a72dc168c52ef93aac928da289a3dcac8f9965f47d124->leave($__internal_99e660a02e7f2222b23a72dc168c52ef93aac928da289a3dcac8f9965f47d124_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
