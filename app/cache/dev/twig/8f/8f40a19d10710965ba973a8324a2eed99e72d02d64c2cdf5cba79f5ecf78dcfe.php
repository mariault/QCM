<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a892218c8beb280643ce7647011f5a6d507e928cc759c411a471b5c2eb81950b extends Twig_Template
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
        $__internal_9a7443085bbb0e7fa53b910015f2b6c501f9ff7f0cb6d81b3c55bce28f454a5d = $this->env->getExtension("native_profiler");
        $__internal_9a7443085bbb0e7fa53b910015f2b6c501f9ff7f0cb6d81b3c55bce28f454a5d->enter($__internal_9a7443085bbb0e7fa53b910015f2b6c501f9ff7f0cb6d81b3c55bce28f454a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9a7443085bbb0e7fa53b910015f2b6c501f9ff7f0cb6d81b3c55bce28f454a5d->leave($__internal_9a7443085bbb0e7fa53b910015f2b6c501f9ff7f0cb6d81b3c55bce28f454a5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
