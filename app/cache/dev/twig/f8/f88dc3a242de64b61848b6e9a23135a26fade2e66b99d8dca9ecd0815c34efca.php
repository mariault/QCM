<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_71b2739eb9174e05d53b5c14068d87983dca85be3443689f347f51ed8f60348c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9c48c79ee3419b72250a8cfa4889145a2b39e2b675b9bb6a5aac4ae741640e1 = $this->env->getExtension("native_profiler");
        $__internal_f9c48c79ee3419b72250a8cfa4889145a2b39e2b675b9bb6a5aac4ae741640e1->enter($__internal_f9c48c79ee3419b72250a8cfa4889145a2b39e2b675b9bb6a5aac4ae741640e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9c48c79ee3419b72250a8cfa4889145a2b39e2b675b9bb6a5aac4ae741640e1->leave($__internal_f9c48c79ee3419b72250a8cfa4889145a2b39e2b675b9bb6a5aac4ae741640e1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb9d6fa8b8e4d93c24699f47c67ef1ddd0e95de23263384356c4a4b79cc4d7f3 = $this->env->getExtension("native_profiler");
        $__internal_fb9d6fa8b8e4d93c24699f47c67ef1ddd0e95de23263384356c4a4b79cc4d7f3->enter($__internal_fb9d6fa8b8e4d93c24699f47c67ef1ddd0e95de23263384356c4a4b79cc4d7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fb9d6fa8b8e4d93c24699f47c67ef1ddd0e95de23263384356c4a4b79cc4d7f3->leave($__internal_fb9d6fa8b8e4d93c24699f47c67ef1ddd0e95de23263384356c4a4b79cc4d7f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
