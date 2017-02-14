<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0b7bbdb63ae288bc90f71f92ecea796001e670b0ccc0f1245bfde1ee449f0c8f extends Twig_Template
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
        $__internal_e5bb2bc02a9b78fe7a43b5b7dfad650289be8715515e6d7d2621eac495fd4d93 = $this->env->getExtension("native_profiler");
        $__internal_e5bb2bc02a9b78fe7a43b5b7dfad650289be8715515e6d7d2621eac495fd4d93->enter($__internal_e5bb2bc02a9b78fe7a43b5b7dfad650289be8715515e6d7d2621eac495fd4d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5bb2bc02a9b78fe7a43b5b7dfad650289be8715515e6d7d2621eac495fd4d93->leave($__internal_e5bb2bc02a9b78fe7a43b5b7dfad650289be8715515e6d7d2621eac495fd4d93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
