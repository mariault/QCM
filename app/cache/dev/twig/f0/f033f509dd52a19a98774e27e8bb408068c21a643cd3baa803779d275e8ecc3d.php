<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a5e727c686bb44e1e90ccb1d547c6af04a9435393c3800a44ebed8a53a4c2309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f01818a93b4208007857f654e3ff890196acae714215b47258f63f660309c7a = $this->env->getExtension("native_profiler");
        $__internal_8f01818a93b4208007857f654e3ff890196acae714215b47258f63f660309c7a->enter($__internal_8f01818a93b4208007857f654e3ff890196acae714215b47258f63f660309c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f01818a93b4208007857f654e3ff890196acae714215b47258f63f660309c7a->leave($__internal_8f01818a93b4208007857f654e3ff890196acae714215b47258f63f660309c7a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d28296b05357267baac0cc08d963ef5d7d6fb5edde4709999baa976fd46ee8d = $this->env->getExtension("native_profiler");
        $__internal_2d28296b05357267baac0cc08d963ef5d7d6fb5edde4709999baa976fd46ee8d->enter($__internal_2d28296b05357267baac0cc08d963ef5d7d6fb5edde4709999baa976fd46ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2d28296b05357267baac0cc08d963ef5d7d6fb5edde4709999baa976fd46ee8d->leave($__internal_2d28296b05357267baac0cc08d963ef5d7d6fb5edde4709999baa976fd46ee8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6617662d25f4e37a815af95beffa20ebac4d78f261b1f2181b8d3ae607fbdf67 = $this->env->getExtension("native_profiler");
        $__internal_6617662d25f4e37a815af95beffa20ebac4d78f261b1f2181b8d3ae607fbdf67->enter($__internal_6617662d25f4e37a815af95beffa20ebac4d78f261b1f2181b8d3ae607fbdf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6617662d25f4e37a815af95beffa20ebac4d78f261b1f2181b8d3ae607fbdf67->leave($__internal_6617662d25f4e37a815af95beffa20ebac4d78f261b1f2181b8d3ae607fbdf67_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
