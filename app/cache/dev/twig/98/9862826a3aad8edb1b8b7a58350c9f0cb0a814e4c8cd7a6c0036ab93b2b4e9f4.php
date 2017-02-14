<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e16a1792f85090024eed8e9a409f2456ed393fc1111c2824b825467784b541c0 extends Twig_Template
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
        $__internal_24eda7e80bd6d307d87b34f66cefb3a79ec3e539ef7c1a6ce0d7008026c3c8ad = $this->env->getExtension("native_profiler");
        $__internal_24eda7e80bd6d307d87b34f66cefb3a79ec3e539ef7c1a6ce0d7008026c3c8ad->enter($__internal_24eda7e80bd6d307d87b34f66cefb3a79ec3e539ef7c1a6ce0d7008026c3c8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_24eda7e80bd6d307d87b34f66cefb3a79ec3e539ef7c1a6ce0d7008026c3c8ad->leave($__internal_24eda7e80bd6d307d87b34f66cefb3a79ec3e539ef7c1a6ce0d7008026c3c8ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
