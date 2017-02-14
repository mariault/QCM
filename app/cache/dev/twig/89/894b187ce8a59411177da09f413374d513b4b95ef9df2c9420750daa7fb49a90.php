<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1fa91b2c2c2cbbf5307b8c3c68daf1f9b1dee147fbe6676e515e5abe17954a4e extends Twig_Template
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
        $__internal_6a2487808676d5c6dda70a98a75b3c3cc88b53850eaaa89723e8b395ad69a522 = $this->env->getExtension("native_profiler");
        $__internal_6a2487808676d5c6dda70a98a75b3c3cc88b53850eaaa89723e8b395ad69a522->enter($__internal_6a2487808676d5c6dda70a98a75b3c3cc88b53850eaaa89723e8b395ad69a522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6a2487808676d5c6dda70a98a75b3c3cc88b53850eaaa89723e8b395ad69a522->leave($__internal_6a2487808676d5c6dda70a98a75b3c3cc88b53850eaaa89723e8b395ad69a522_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_37d44ac5aba857949f37ab81438690c8a55b31f63b4668f3ed0906e16838538f = $this->env->getExtension("native_profiler");
        $__internal_37d44ac5aba857949f37ab81438690c8a55b31f63b4668f3ed0906e16838538f->enter($__internal_37d44ac5aba857949f37ab81438690c8a55b31f63b4668f3ed0906e16838538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_37d44ac5aba857949f37ab81438690c8a55b31f63b4668f3ed0906e16838538f->leave($__internal_37d44ac5aba857949f37ab81438690c8a55b31f63b4668f3ed0906e16838538f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6dc8de8c61ccfefa458bad6cce53accfd78c9de825391a873be9215f4e002fef = $this->env->getExtension("native_profiler");
        $__internal_6dc8de8c61ccfefa458bad6cce53accfd78c9de825391a873be9215f4e002fef->enter($__internal_6dc8de8c61ccfefa458bad6cce53accfd78c9de825391a873be9215f4e002fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6dc8de8c61ccfefa458bad6cce53accfd78c9de825391a873be9215f4e002fef->leave($__internal_6dc8de8c61ccfefa458bad6cce53accfd78c9de825391a873be9215f4e002fef_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_738775f5ba4a95dfb32499cdcc032b62a7afec72281b76bdb1f05c77ea3e32aa = $this->env->getExtension("native_profiler");
        $__internal_738775f5ba4a95dfb32499cdcc032b62a7afec72281b76bdb1f05c77ea3e32aa->enter($__internal_738775f5ba4a95dfb32499cdcc032b62a7afec72281b76bdb1f05c77ea3e32aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_738775f5ba4a95dfb32499cdcc032b62a7afec72281b76bdb1f05c77ea3e32aa->leave($__internal_738775f5ba4a95dfb32499cdcc032b62a7afec72281b76bdb1f05c77ea3e32aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
