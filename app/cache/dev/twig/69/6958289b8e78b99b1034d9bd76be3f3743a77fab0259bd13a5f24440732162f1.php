<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a8a1ae02181899d3f1b332cb2377bd7537116f315a45c3420dca2282aad5aa69 extends Twig_Template
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
        $__internal_ae98d92287ddc20074d0d33fd2e855aea7bede3c55ee2b868aaec36c47c60fc2 = $this->env->getExtension("native_profiler");
        $__internal_ae98d92287ddc20074d0d33fd2e855aea7bede3c55ee2b868aaec36c47c60fc2->enter($__internal_ae98d92287ddc20074d0d33fd2e855aea7bede3c55ee2b868aaec36c47c60fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ae98d92287ddc20074d0d33fd2e855aea7bede3c55ee2b868aaec36c47c60fc2->leave($__internal_ae98d92287ddc20074d0d33fd2e855aea7bede3c55ee2b868aaec36c47c60fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
