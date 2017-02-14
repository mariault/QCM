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
        $__internal_2b40ffe1858dd340780964ce1df8f788a58c48de4db2c5cfaf0a6fcb41b9c174 = $this->env->getExtension("native_profiler");
        $__internal_2b40ffe1858dd340780964ce1df8f788a58c48de4db2c5cfaf0a6fcb41b9c174->enter($__internal_2b40ffe1858dd340780964ce1df8f788a58c48de4db2c5cfaf0a6fcb41b9c174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2b40ffe1858dd340780964ce1df8f788a58c48de4db2c5cfaf0a6fcb41b9c174->leave($__internal_2b40ffe1858dd340780964ce1df8f788a58c48de4db2c5cfaf0a6fcb41b9c174_prof);

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
