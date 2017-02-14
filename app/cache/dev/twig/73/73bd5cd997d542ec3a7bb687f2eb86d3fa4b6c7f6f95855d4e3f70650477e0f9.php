<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bbe42ade4c26b50c1bcc479c8f5ba6c2f318bba4795a3c5ab2348ab69bc824f4 extends Twig_Template
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
        $__internal_ced66fda32a41ee9cd15bf1f1342bc55c466117a5f052b378c69c3052991a634 = $this->env->getExtension("native_profiler");
        $__internal_ced66fda32a41ee9cd15bf1f1342bc55c466117a5f052b378c69c3052991a634->enter($__internal_ced66fda32a41ee9cd15bf1f1342bc55c466117a5f052b378c69c3052991a634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ced66fda32a41ee9cd15bf1f1342bc55c466117a5f052b378c69c3052991a634->leave($__internal_ced66fda32a41ee9cd15bf1f1342bc55c466117a5f052b378c69c3052991a634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
