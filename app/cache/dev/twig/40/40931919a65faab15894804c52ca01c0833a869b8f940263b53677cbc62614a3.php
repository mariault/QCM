<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_568a903c64823515d8e6267e8674353b32833b95cf6666683bc3c10cb86f6dd4 extends Twig_Template
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
        $__internal_3a17f28809e457d32708ae7a0ac52de8ba6aa6a3fac542cda3757089be22bc38 = $this->env->getExtension("native_profiler");
        $__internal_3a17f28809e457d32708ae7a0ac52de8ba6aa6a3fac542cda3757089be22bc38->enter($__internal_3a17f28809e457d32708ae7a0ac52de8ba6aa6a3fac542cda3757089be22bc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3a17f28809e457d32708ae7a0ac52de8ba6aa6a3fac542cda3757089be22bc38->leave($__internal_3a17f28809e457d32708ae7a0ac52de8ba6aa6a3fac542cda3757089be22bc38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
