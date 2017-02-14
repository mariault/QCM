<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a3da80e509ae2fa5da81a0e9b42cf37bb75c51729da36c2fcdbecbcb46f1297e extends Twig_Template
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
        $__internal_587af512ed9014c600bac47e5f71f6ecef417724f649349d4a1ceade2f4d3470 = $this->env->getExtension("native_profiler");
        $__internal_587af512ed9014c600bac47e5f71f6ecef417724f649349d4a1ceade2f4d3470->enter($__internal_587af512ed9014c600bac47e5f71f6ecef417724f649349d4a1ceade2f4d3470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_587af512ed9014c600bac47e5f71f6ecef417724f649349d4a1ceade2f4d3470->leave($__internal_587af512ed9014c600bac47e5f71f6ecef417724f649349d4a1ceade2f4d3470_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
