<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7f24c05ce1d0e96e7158393af9c1bd8c39395173ae19fad4c0dabfa54b9a4d2c extends Twig_Template
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
        $__internal_210712f740aff2b36892c4084f5f01f5b9cd34b33f371acb41e8448361a326c2 = $this->env->getExtension("native_profiler");
        $__internal_210712f740aff2b36892c4084f5f01f5b9cd34b33f371acb41e8448361a326c2->enter($__internal_210712f740aff2b36892c4084f5f01f5b9cd34b33f371acb41e8448361a326c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_210712f740aff2b36892c4084f5f01f5b9cd34b33f371acb41e8448361a326c2->leave($__internal_210712f740aff2b36892c4084f5f01f5b9cd34b33f371acb41e8448361a326c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
