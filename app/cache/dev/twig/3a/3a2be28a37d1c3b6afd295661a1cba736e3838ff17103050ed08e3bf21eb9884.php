<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e0325b7ca2e171e9a41a567e2db17d85f135e2fccadc4b3131436b9f3390a460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c030907d84a000b68ea0a5cdfbffed4ab124b1b8399255f1e51d5984a7bf4ae = $this->env->getExtension("native_profiler");
        $__internal_4c030907d84a000b68ea0a5cdfbffed4ab124b1b8399255f1e51d5984a7bf4ae->enter($__internal_4c030907d84a000b68ea0a5cdfbffed4ab124b1b8399255f1e51d5984a7bf4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c030907d84a000b68ea0a5cdfbffed4ab124b1b8399255f1e51d5984a7bf4ae->leave($__internal_4c030907d84a000b68ea0a5cdfbffed4ab124b1b8399255f1e51d5984a7bf4ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0aa98cb44f3a0eb0bc86d190affec207e7ada712f40bd8721bfdfb8596c8c961 = $this->env->getExtension("native_profiler");
        $__internal_0aa98cb44f3a0eb0bc86d190affec207e7ada712f40bd8721bfdfb8596c8c961->enter($__internal_0aa98cb44f3a0eb0bc86d190affec207e7ada712f40bd8721bfdfb8596c8c961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0aa98cb44f3a0eb0bc86d190affec207e7ada712f40bd8721bfdfb8596c8c961->leave($__internal_0aa98cb44f3a0eb0bc86d190affec207e7ada712f40bd8721bfdfb8596c8c961_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dc606e8bd0864eba0df7be8f5776e35b7f7c80ce88c446cec4549e9c6425245 = $this->env->getExtension("native_profiler");
        $__internal_8dc606e8bd0864eba0df7be8f5776e35b7f7c80ce88c446cec4549e9c6425245->enter($__internal_8dc606e8bd0864eba0df7be8f5776e35b7f7c80ce88c446cec4549e9c6425245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8dc606e8bd0864eba0df7be8f5776e35b7f7c80ce88c446cec4549e9c6425245->leave($__internal_8dc606e8bd0864eba0df7be8f5776e35b7f7c80ce88c446cec4549e9c6425245_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0a6af876ca8b885eae97b8707c0a51625f15a1594abb33867a7dca411c88d35 = $this->env->getExtension("native_profiler");
        $__internal_b0a6af876ca8b885eae97b8707c0a51625f15a1594abb33867a7dca411c88d35->enter($__internal_b0a6af876ca8b885eae97b8707c0a51625f15a1594abb33867a7dca411c88d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0a6af876ca8b885eae97b8707c0a51625f15a1594abb33867a7dca411c88d35->leave($__internal_b0a6af876ca8b885eae97b8707c0a51625f15a1594abb33867a7dca411c88d35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
