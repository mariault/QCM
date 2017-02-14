<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8d033fb9a81e8023ec761f3410fc1997cec63fa288b334c97e56607c7da0d8c5 extends Twig_Template
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
        $__internal_2bb5e5b452a548123861942408fe18ca2fa1a89d3287f808214865c9c5dc4d5f = $this->env->getExtension("native_profiler");
        $__internal_2bb5e5b452a548123861942408fe18ca2fa1a89d3287f808214865c9c5dc4d5f->enter($__internal_2bb5e5b452a548123861942408fe18ca2fa1a89d3287f808214865c9c5dc4d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2bb5e5b452a548123861942408fe18ca2fa1a89d3287f808214865c9c5dc4d5f->leave($__internal_2bb5e5b452a548123861942408fe18ca2fa1a89d3287f808214865c9c5dc4d5f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
