<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c712e789b2add52b18aebe3113391c5b48bfac6fc59fb5acc19e489ca5f41339 extends Twig_Template
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
        $__internal_9b6bea7553d4aa9e4ad0fc077bb070a55d9d990276e87c985c936f83a6ac9ea0 = $this->env->getExtension("native_profiler");
        $__internal_9b6bea7553d4aa9e4ad0fc077bb070a55d9d990276e87c985c936f83a6ac9ea0->enter($__internal_9b6bea7553d4aa9e4ad0fc077bb070a55d9d990276e87c985c936f83a6ac9ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9b6bea7553d4aa9e4ad0fc077bb070a55d9d990276e87c985c936f83a6ac9ea0->leave($__internal_9b6bea7553d4aa9e4ad0fc077bb070a55d9d990276e87c985c936f83a6ac9ea0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
