<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_57f025975cfe74cc2831b5371e68d51f779cbf9c7a9bff2ecc69feefed5ccc31 extends Twig_Template
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
        $__internal_da7fd4bd6594fb9fbdc1c094d723ce98139a5703321129ca07dbf0f4dcf2ed95 = $this->env->getExtension("native_profiler");
        $__internal_da7fd4bd6594fb9fbdc1c094d723ce98139a5703321129ca07dbf0f4dcf2ed95->enter($__internal_da7fd4bd6594fb9fbdc1c094d723ce98139a5703321129ca07dbf0f4dcf2ed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_da7fd4bd6594fb9fbdc1c094d723ce98139a5703321129ca07dbf0f4dcf2ed95->leave($__internal_da7fd4bd6594fb9fbdc1c094d723ce98139a5703321129ca07dbf0f4dcf2ed95_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
