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
        $__internal_8c56b3654ac16847f0cfb7271bd041688d6eae08251ce389fa54802eee35c0b3 = $this->env->getExtension("native_profiler");
        $__internal_8c56b3654ac16847f0cfb7271bd041688d6eae08251ce389fa54802eee35c0b3->enter($__internal_8c56b3654ac16847f0cfb7271bd041688d6eae08251ce389fa54802eee35c0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8c56b3654ac16847f0cfb7271bd041688d6eae08251ce389fa54802eee35c0b3->leave($__internal_8c56b3654ac16847f0cfb7271bd041688d6eae08251ce389fa54802eee35c0b3_prof);

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
