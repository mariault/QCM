<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_930434654c83b7265ebf1b5e3c3b9ff05a22b1dcb26b6ad894aa9a76f03962d5 extends Twig_Template
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
        $__internal_48d01c1ea404768c0838eb22df8ca70822902c8e306229e53469d00d67e026c4 = $this->env->getExtension("native_profiler");
        $__internal_48d01c1ea404768c0838eb22df8ca70822902c8e306229e53469d00d67e026c4->enter($__internal_48d01c1ea404768c0838eb22df8ca70822902c8e306229e53469d00d67e026c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_48d01c1ea404768c0838eb22df8ca70822902c8e306229e53469d00d67e026c4->leave($__internal_48d01c1ea404768c0838eb22df8ca70822902c8e306229e53469d00d67e026c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
