<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f9318e3509a91a3b1624eb39353bd3a74b0030cb84ab51ba628b913c4b44a4c7 extends Twig_Template
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
        $__internal_efeba31604c8c13fa50d82c926b2a49192ba8129939b6d90d5c6cbe5f02a0ffa = $this->env->getExtension("native_profiler");
        $__internal_efeba31604c8c13fa50d82c926b2a49192ba8129939b6d90d5c6cbe5f02a0ffa->enter($__internal_efeba31604c8c13fa50d82c926b2a49192ba8129939b6d90d5c6cbe5f02a0ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_efeba31604c8c13fa50d82c926b2a49192ba8129939b6d90d5c6cbe5f02a0ffa->leave($__internal_efeba31604c8c13fa50d82c926b2a49192ba8129939b6d90d5c6cbe5f02a0ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
