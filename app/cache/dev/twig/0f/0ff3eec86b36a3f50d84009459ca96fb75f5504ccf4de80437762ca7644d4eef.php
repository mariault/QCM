<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b3907615d6e149fb1243546c6f52ff4b7e76fdc6341fa184bd9031d6ddc614af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_d2baed45483aa8cd33377fc08d84b1cd285dfa59a8ac78653f68f8b921a36d50 = $this->env->getExtension("native_profiler");
        $__internal_d2baed45483aa8cd33377fc08d84b1cd285dfa59a8ac78653f68f8b921a36d50->enter($__internal_d2baed45483aa8cd33377fc08d84b1cd285dfa59a8ac78653f68f8b921a36d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2baed45483aa8cd33377fc08d84b1cd285dfa59a8ac78653f68f8b921a36d50->leave($__internal_d2baed45483aa8cd33377fc08d84b1cd285dfa59a8ac78653f68f8b921a36d50_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5e364a5e8d8632f5a726ec7b53283f933cf9dbc5956d40e910f0f9b2368fb9a = $this->env->getExtension("native_profiler");
        $__internal_b5e364a5e8d8632f5a726ec7b53283f933cf9dbc5956d40e910f0f9b2368fb9a->enter($__internal_b5e364a5e8d8632f5a726ec7b53283f933cf9dbc5956d40e910f0f9b2368fb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b5e364a5e8d8632f5a726ec7b53283f933cf9dbc5956d40e910f0f9b2368fb9a->leave($__internal_b5e364a5e8d8632f5a726ec7b53283f933cf9dbc5956d40e910f0f9b2368fb9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
