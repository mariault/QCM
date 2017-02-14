<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c59f89b0f132ff43d724e5678963bdbd91d5067319e598a87575d60c279996f2 extends Twig_Template
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
        $__internal_06876cd3abb75d52d85ca120ac5d8cbf6b087e2861bf3315754f7333a84bc2db = $this->env->getExtension("native_profiler");
        $__internal_06876cd3abb75d52d85ca120ac5d8cbf6b087e2861bf3315754f7333a84bc2db->enter($__internal_06876cd3abb75d52d85ca120ac5d8cbf6b087e2861bf3315754f7333a84bc2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_06876cd3abb75d52d85ca120ac5d8cbf6b087e2861bf3315754f7333a84bc2db->leave($__internal_06876cd3abb75d52d85ca120ac5d8cbf6b087e2861bf3315754f7333a84bc2db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
