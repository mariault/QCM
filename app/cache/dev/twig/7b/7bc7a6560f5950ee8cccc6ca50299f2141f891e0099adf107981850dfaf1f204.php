<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_16c29b42ff4b8eea28ac7d66b4a51c1c43b85dd984521dd8d56839fde923d101 extends Twig_Template
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
        $__internal_07183eac9178eb0d87d26f99360ddd7da63bf1c32e78104d5354160ed7ad2a9b = $this->env->getExtension("native_profiler");
        $__internal_07183eac9178eb0d87d26f99360ddd7da63bf1c32e78104d5354160ed7ad2a9b->enter($__internal_07183eac9178eb0d87d26f99360ddd7da63bf1c32e78104d5354160ed7ad2a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_07183eac9178eb0d87d26f99360ddd7da63bf1c32e78104d5354160ed7ad2a9b->leave($__internal_07183eac9178eb0d87d26f99360ddd7da63bf1c32e78104d5354160ed7ad2a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
