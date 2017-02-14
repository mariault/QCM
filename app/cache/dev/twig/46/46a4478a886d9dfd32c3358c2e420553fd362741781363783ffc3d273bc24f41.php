<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c96084019275044b569f2b9e5eafb9b26e19815666624ceebc0dd66b5c3a5f98 extends Twig_Template
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
        $__internal_a93e16acdc6b2a7a899959b13557ac88b5a5ddef94a5abeda6c11065f8f60a5e = $this->env->getExtension("native_profiler");
        $__internal_a93e16acdc6b2a7a899959b13557ac88b5a5ddef94a5abeda6c11065f8f60a5e->enter($__internal_a93e16acdc6b2a7a899959b13557ac88b5a5ddef94a5abeda6c11065f8f60a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a93e16acdc6b2a7a899959b13557ac88b5a5ddef94a5abeda6c11065f8f60a5e->leave($__internal_a93e16acdc6b2a7a899959b13557ac88b5a5ddef94a5abeda6c11065f8f60a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
