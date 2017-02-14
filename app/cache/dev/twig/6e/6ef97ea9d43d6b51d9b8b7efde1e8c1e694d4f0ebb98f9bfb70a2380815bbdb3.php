<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_708246c08018f9fa58d70cbb6a4a647021174d415d86390738cc289bff853277 extends Twig_Template
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
        $__internal_a4b4a277d0a3e042c87ca7960c08b8e78665fa181b119927760349c4dda919a1 = $this->env->getExtension("native_profiler");
        $__internal_a4b4a277d0a3e042c87ca7960c08b8e78665fa181b119927760349c4dda919a1->enter($__internal_a4b4a277d0a3e042c87ca7960c08b8e78665fa181b119927760349c4dda919a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a4b4a277d0a3e042c87ca7960c08b8e78665fa181b119927760349c4dda919a1->leave($__internal_a4b4a277d0a3e042c87ca7960c08b8e78665fa181b119927760349c4dda919a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
