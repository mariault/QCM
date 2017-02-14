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
        $__internal_ebbf79aba98aedb4ae4cd14310c06ea5f5f5c7e92b5519f8987718e5c9efe0b7 = $this->env->getExtension("native_profiler");
        $__internal_ebbf79aba98aedb4ae4cd14310c06ea5f5f5c7e92b5519f8987718e5c9efe0b7->enter($__internal_ebbf79aba98aedb4ae4cd14310c06ea5f5f5c7e92b5519f8987718e5c9efe0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ebbf79aba98aedb4ae4cd14310c06ea5f5f5c7e92b5519f8987718e5c9efe0b7->leave($__internal_ebbf79aba98aedb4ae4cd14310c06ea5f5f5c7e92b5519f8987718e5c9efe0b7_prof);

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
