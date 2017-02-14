<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_40cca949dc52c58023a247b06539c46564efa4a5b302325e3a6807a10268b6b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14a0de0b927cc35d6bf9e88b18d1ce1253d9c9c622d5c3610d1f8c46e85ac672 = $this->env->getExtension("native_profiler");
        $__internal_14a0de0b927cc35d6bf9e88b18d1ce1253d9c9c622d5c3610d1f8c46e85ac672->enter($__internal_14a0de0b927cc35d6bf9e88b18d1ce1253d9c9c622d5c3610d1f8c46e85ac672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_14a0de0b927cc35d6bf9e88b18d1ce1253d9c9c622d5c3610d1f8c46e85ac672->leave($__internal_14a0de0b927cc35d6bf9e88b18d1ce1253d9c9c622d5c3610d1f8c46e85ac672_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ccb8a6d851d16bf9a44a2231e5fadfa38d66531a0f2be39b47685f3cc8235597 = $this->env->getExtension("native_profiler");
        $__internal_ccb8a6d851d16bf9a44a2231e5fadfa38d66531a0f2be39b47685f3cc8235597->enter($__internal_ccb8a6d851d16bf9a44a2231e5fadfa38d66531a0f2be39b47685f3cc8235597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ccb8a6d851d16bf9a44a2231e5fadfa38d66531a0f2be39b47685f3cc8235597->leave($__internal_ccb8a6d851d16bf9a44a2231e5fadfa38d66531a0f2be39b47685f3cc8235597_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bcb18996507abe78e9997ab45ddfc4e49a6ab00f3d947b520642878e9f69f27b = $this->env->getExtension("native_profiler");
        $__internal_bcb18996507abe78e9997ab45ddfc4e49a6ab00f3d947b520642878e9f69f27b->enter($__internal_bcb18996507abe78e9997ab45ddfc4e49a6ab00f3d947b520642878e9f69f27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bcb18996507abe78e9997ab45ddfc4e49a6ab00f3d947b520642878e9f69f27b->leave($__internal_bcb18996507abe78e9997ab45ddfc4e49a6ab00f3d947b520642878e9f69f27b_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d2b8071ebe90efff285c237c06c3d6d1e731496c2a3eaa914a7b091c192b58ec = $this->env->getExtension("native_profiler");
        $__internal_d2b8071ebe90efff285c237c06c3d6d1e731496c2a3eaa914a7b091c192b58ec->enter($__internal_d2b8071ebe90efff285c237c06c3d6d1e731496c2a3eaa914a7b091c192b58ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d2b8071ebe90efff285c237c06c3d6d1e731496c2a3eaa914a7b091c192b58ec->leave($__internal_d2b8071ebe90efff285c237c06c3d6d1e731496c2a3eaa914a7b091c192b58ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
