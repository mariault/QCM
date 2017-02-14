<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7de47959d22662693bcb876e21acfe1c19cb18a36bd5a90a4cb930e2f1320fb8 extends Twig_Template
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
        $__internal_00fee1837aa0435256a3c033fc95eceb8562177465a537345b5881ac67cb0900 = $this->env->getExtension("native_profiler");
        $__internal_00fee1837aa0435256a3c033fc95eceb8562177465a537345b5881ac67cb0900->enter($__internal_00fee1837aa0435256a3c033fc95eceb8562177465a537345b5881ac67cb0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_00fee1837aa0435256a3c033fc95eceb8562177465a537345b5881ac67cb0900->leave($__internal_00fee1837aa0435256a3c033fc95eceb8562177465a537345b5881ac67cb0900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
