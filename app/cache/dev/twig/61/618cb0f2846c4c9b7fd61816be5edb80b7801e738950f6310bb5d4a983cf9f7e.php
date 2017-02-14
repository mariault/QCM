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
        $__internal_745f9f15d6b603f9d07fbcf82e006656acf4a3ef32f75ed8c89aa35c67bedab2 = $this->env->getExtension("native_profiler");
        $__internal_745f9f15d6b603f9d07fbcf82e006656acf4a3ef32f75ed8c89aa35c67bedab2->enter($__internal_745f9f15d6b603f9d07fbcf82e006656acf4a3ef32f75ed8c89aa35c67bedab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_745f9f15d6b603f9d07fbcf82e006656acf4a3ef32f75ed8c89aa35c67bedab2->leave($__internal_745f9f15d6b603f9d07fbcf82e006656acf4a3ef32f75ed8c89aa35c67bedab2_prof);

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
