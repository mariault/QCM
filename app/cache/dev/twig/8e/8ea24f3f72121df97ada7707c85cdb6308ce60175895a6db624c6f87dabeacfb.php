<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_cface13e416f224a54bdfc6bd4b6ee25ca9cdef782c1838384370d5117e98dc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_da603de82fd5d41d403d8a6e47bb684b71cab4096a12625e00a49d91ae8d5ff8 = $this->env->getExtension("native_profiler");
        $__internal_da603de82fd5d41d403d8a6e47bb684b71cab4096a12625e00a49d91ae8d5ff8->enter($__internal_da603de82fd5d41d403d8a6e47bb684b71cab4096a12625e00a49d91ae8d5ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da603de82fd5d41d403d8a6e47bb684b71cab4096a12625e00a49d91ae8d5ff8->leave($__internal_da603de82fd5d41d403d8a6e47bb684b71cab4096a12625e00a49d91ae8d5ff8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2dd3c4a795a24671d8eadfa99103d39b29a9feb6eda82d3a354092cdea5f555 = $this->env->getExtension("native_profiler");
        $__internal_c2dd3c4a795a24671d8eadfa99103d39b29a9feb6eda82d3a354092cdea5f555->enter($__internal_c2dd3c4a795a24671d8eadfa99103d39b29a9feb6eda82d3a354092cdea5f555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c2dd3c4a795a24671d8eadfa99103d39b29a9feb6eda82d3a354092cdea5f555->leave($__internal_c2dd3c4a795a24671d8eadfa99103d39b29a9feb6eda82d3a354092cdea5f555_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
