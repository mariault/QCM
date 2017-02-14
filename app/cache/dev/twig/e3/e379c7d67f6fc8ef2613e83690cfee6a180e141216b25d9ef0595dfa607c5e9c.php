<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e0d951888d5dbbdd62b186cfa91fcf1283e91179142e20e91eb02bb33c65078 extends Twig_Template
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
        $__internal_21bd27148ca909a9f56871b73cff3894454a7f78967b360a0779913b42772a7e = $this->env->getExtension("native_profiler");
        $__internal_21bd27148ca909a9f56871b73cff3894454a7f78967b360a0779913b42772a7e->enter($__internal_21bd27148ca909a9f56871b73cff3894454a7f78967b360a0779913b42772a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_21bd27148ca909a9f56871b73cff3894454a7f78967b360a0779913b42772a7e->leave($__internal_21bd27148ca909a9f56871b73cff3894454a7f78967b360a0779913b42772a7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
