<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_34d28ea432463e2de8bc0af3d0c7bf948003f4f8ddf789aee8205b02c92530ea extends Twig_Template
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
        $__internal_79f720380da82892d0bd31ebd3f29454e28de36d9fe94053f99321556430307f = $this->env->getExtension("native_profiler");
        $__internal_79f720380da82892d0bd31ebd3f29454e28de36d9fe94053f99321556430307f->enter($__internal_79f720380da82892d0bd31ebd3f29454e28de36d9fe94053f99321556430307f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_79f720380da82892d0bd31ebd3f29454e28de36d9fe94053f99321556430307f->leave($__internal_79f720380da82892d0bd31ebd3f29454e28de36d9fe94053f99321556430307f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
