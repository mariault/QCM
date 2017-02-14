<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8c6b05040828a848ed02379dcdd0f3986a8cd386d9f4c11d35e0d7dd30301b0d extends Twig_Template
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
        $__internal_f7ffa998620785b79bcb0826dadb5cacd6b4026875d36efab0bcb78763f72a34 = $this->env->getExtension("native_profiler");
        $__internal_f7ffa998620785b79bcb0826dadb5cacd6b4026875d36efab0bcb78763f72a34->enter($__internal_f7ffa998620785b79bcb0826dadb5cacd6b4026875d36efab0bcb78763f72a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f7ffa998620785b79bcb0826dadb5cacd6b4026875d36efab0bcb78763f72a34->leave($__internal_f7ffa998620785b79bcb0826dadb5cacd6b4026875d36efab0bcb78763f72a34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
