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
        $__internal_7a2edf5fd9fd542b2e31b1081951b5fc3760a1a014c0f99916bbb11d9363d105 = $this->env->getExtension("native_profiler");
        $__internal_7a2edf5fd9fd542b2e31b1081951b5fc3760a1a014c0f99916bbb11d9363d105->enter($__internal_7a2edf5fd9fd542b2e31b1081951b5fc3760a1a014c0f99916bbb11d9363d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2edf5fd9fd542b2e31b1081951b5fc3760a1a014c0f99916bbb11d9363d105->leave($__internal_7a2edf5fd9fd542b2e31b1081951b5fc3760a1a014c0f99916bbb11d9363d105_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e40e7015fc83f1a9ee43126a828876d66e604e3dd592946895cbedd8ff1ed481 = $this->env->getExtension("native_profiler");
        $__internal_e40e7015fc83f1a9ee43126a828876d66e604e3dd592946895cbedd8ff1ed481->enter($__internal_e40e7015fc83f1a9ee43126a828876d66e604e3dd592946895cbedd8ff1ed481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e40e7015fc83f1a9ee43126a828876d66e604e3dd592946895cbedd8ff1ed481->leave($__internal_e40e7015fc83f1a9ee43126a828876d66e604e3dd592946895cbedd8ff1ed481_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a70e47291e14ab46971bc36787aeb95ccf87f1772d9ceeba2f19d272203b238d = $this->env->getExtension("native_profiler");
        $__internal_a70e47291e14ab46971bc36787aeb95ccf87f1772d9ceeba2f19d272203b238d->enter($__internal_a70e47291e14ab46971bc36787aeb95ccf87f1772d9ceeba2f19d272203b238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a70e47291e14ab46971bc36787aeb95ccf87f1772d9ceeba2f19d272203b238d->leave($__internal_a70e47291e14ab46971bc36787aeb95ccf87f1772d9ceeba2f19d272203b238d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d6cbf6ae5f44e3d43d03faae24d2e9a2839df7732928326aae5716df50a252f = $this->env->getExtension("native_profiler");
        $__internal_8d6cbf6ae5f44e3d43d03faae24d2e9a2839df7732928326aae5716df50a252f->enter($__internal_8d6cbf6ae5f44e3d43d03faae24d2e9a2839df7732928326aae5716df50a252f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8d6cbf6ae5f44e3d43d03faae24d2e9a2839df7732928326aae5716df50a252f->leave($__internal_8d6cbf6ae5f44e3d43d03faae24d2e9a2839df7732928326aae5716df50a252f_prof);

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
