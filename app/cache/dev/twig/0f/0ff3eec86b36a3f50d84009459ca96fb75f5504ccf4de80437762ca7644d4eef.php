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
        $__internal_2549e59d80b6ab97fb1b7bc284c9ed382a9907276ba7ad6aa5edb51b5151e929 = $this->env->getExtension("native_profiler");
        $__internal_2549e59d80b6ab97fb1b7bc284c9ed382a9907276ba7ad6aa5edb51b5151e929->enter($__internal_2549e59d80b6ab97fb1b7bc284c9ed382a9907276ba7ad6aa5edb51b5151e929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2549e59d80b6ab97fb1b7bc284c9ed382a9907276ba7ad6aa5edb51b5151e929->leave($__internal_2549e59d80b6ab97fb1b7bc284c9ed382a9907276ba7ad6aa5edb51b5151e929_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a33904670e665afa6c07ee5e1199523d68b706667abb6fdff610991357ee2ba6 = $this->env->getExtension("native_profiler");
        $__internal_a33904670e665afa6c07ee5e1199523d68b706667abb6fdff610991357ee2ba6->enter($__internal_a33904670e665afa6c07ee5e1199523d68b706667abb6fdff610991357ee2ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a33904670e665afa6c07ee5e1199523d68b706667abb6fdff610991357ee2ba6->leave($__internal_a33904670e665afa6c07ee5e1199523d68b706667abb6fdff610991357ee2ba6_prof);

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
