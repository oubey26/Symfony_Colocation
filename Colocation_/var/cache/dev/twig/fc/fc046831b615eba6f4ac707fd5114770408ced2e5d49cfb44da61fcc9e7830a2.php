<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ab031ecc17ec2fc5027438625bb4820ef53c2fa133b2d32044889197b9a08730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f9080ce2cc848a45d1e80c1c29afde6328c7d081fd53b07da0be3218bb4f589f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9080ce2cc848a45d1e80c1c29afde6328c7d081fd53b07da0be3218bb4f589f->enter($__internal_f9080ce2cc848a45d1e80c1c29afde6328c7d081fd53b07da0be3218bb4f589f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_55233674fc74f5ddb5ed81bd83d5fe3072111ee080ff9379f341952f31bfc490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55233674fc74f5ddb5ed81bd83d5fe3072111ee080ff9379f341952f31bfc490->enter($__internal_55233674fc74f5ddb5ed81bd83d5fe3072111ee080ff9379f341952f31bfc490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9080ce2cc848a45d1e80c1c29afde6328c7d081fd53b07da0be3218bb4f589f->leave($__internal_f9080ce2cc848a45d1e80c1c29afde6328c7d081fd53b07da0be3218bb4f589f_prof);

        
        $__internal_55233674fc74f5ddb5ed81bd83d5fe3072111ee080ff9379f341952f31bfc490->leave($__internal_55233674fc74f5ddb5ed81bd83d5fe3072111ee080ff9379f341952f31bfc490_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d824e252260b32017cf41d4071894087c23f13423c16a10f3e2eb320777e18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d824e252260b32017cf41d4071894087c23f13423c16a10f3e2eb320777e18a->enter($__internal_4d824e252260b32017cf41d4071894087c23f13423c16a10f3e2eb320777e18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c318188a735e65f3a39bd7716b22ab03ce1c0833a2fc1b39bdad73df658c4ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c318188a735e65f3a39bd7716b22ab03ce1c0833a2fc1b39bdad73df658c4ff4->enter($__internal_c318188a735e65f3a39bd7716b22ab03ce1c0833a2fc1b39bdad73df658c4ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c318188a735e65f3a39bd7716b22ab03ce1c0833a2fc1b39bdad73df658c4ff4->leave($__internal_c318188a735e65f3a39bd7716b22ab03ce1c0833a2fc1b39bdad73df658c4ff4_prof);

        
        $__internal_4d824e252260b32017cf41d4071894087c23f13423c16a10f3e2eb320777e18a->leave($__internal_4d824e252260b32017cf41d4071894087c23f13423c16a10f3e2eb320777e18a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
