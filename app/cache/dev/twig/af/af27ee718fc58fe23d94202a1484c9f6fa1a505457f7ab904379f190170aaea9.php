<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8f9223d33b1dcb5e965bd4082d3de532d771d2ff1b33995335d44ec8af627179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cb9e8139f9b26d03fe104f18b421460efd51862936e3a5ce218127e94ab18bcc = $this->env->getExtension("native_profiler");
        $__internal_cb9e8139f9b26d03fe104f18b421460efd51862936e3a5ce218127e94ab18bcc->enter($__internal_cb9e8139f9b26d03fe104f18b421460efd51862936e3a5ce218127e94ab18bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb9e8139f9b26d03fe104f18b421460efd51862936e3a5ce218127e94ab18bcc->leave($__internal_cb9e8139f9b26d03fe104f18b421460efd51862936e3a5ce218127e94ab18bcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7d65dae3b477b3d9a76d5022d5c7063f79d10cca87dc6a57c33e46291d3a2f7 = $this->env->getExtension("native_profiler");
        $__internal_b7d65dae3b477b3d9a76d5022d5c7063f79d10cca87dc6a57c33e46291d3a2f7->enter($__internal_b7d65dae3b477b3d9a76d5022d5c7063f79d10cca87dc6a57c33e46291d3a2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b7d65dae3b477b3d9a76d5022d5c7063f79d10cca87dc6a57c33e46291d3a2f7->leave($__internal_b7d65dae3b477b3d9a76d5022d5c7063f79d10cca87dc6a57c33e46291d3a2f7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a58dea449efbdc35e00c0150ac91cf1dcf0ad4672c0e8a50873b88aed5fc9d55 = $this->env->getExtension("native_profiler");
        $__internal_a58dea449efbdc35e00c0150ac91cf1dcf0ad4672c0e8a50873b88aed5fc9d55->enter($__internal_a58dea449efbdc35e00c0150ac91cf1dcf0ad4672c0e8a50873b88aed5fc9d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a58dea449efbdc35e00c0150ac91cf1dcf0ad4672c0e8a50873b88aed5fc9d55->leave($__internal_a58dea449efbdc35e00c0150ac91cf1dcf0ad4672c0e8a50873b88aed5fc9d55_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d21a027722a6712657c05710b95eb5b5d6fbb6488f972af9af7e77c988312a3e = $this->env->getExtension("native_profiler");
        $__internal_d21a027722a6712657c05710b95eb5b5d6fbb6488f972af9af7e77c988312a3e->enter($__internal_d21a027722a6712657c05710b95eb5b5d6fbb6488f972af9af7e77c988312a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d21a027722a6712657c05710b95eb5b5d6fbb6488f972af9af7e77c988312a3e->leave($__internal_d21a027722a6712657c05710b95eb5b5d6fbb6488f972af9af7e77c988312a3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
