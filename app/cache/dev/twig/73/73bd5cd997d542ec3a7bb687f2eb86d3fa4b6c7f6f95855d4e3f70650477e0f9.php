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
        $__internal_00373e85f2b82e4f1d950a1131f2e55b809694a07ac613406c6d1aceea7b223a = $this->env->getExtension("native_profiler");
        $__internal_00373e85f2b82e4f1d950a1131f2e55b809694a07ac613406c6d1aceea7b223a->enter($__internal_00373e85f2b82e4f1d950a1131f2e55b809694a07ac613406c6d1aceea7b223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_00373e85f2b82e4f1d950a1131f2e55b809694a07ac613406c6d1aceea7b223a->leave($__internal_00373e85f2b82e4f1d950a1131f2e55b809694a07ac613406c6d1aceea7b223a_prof);

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
