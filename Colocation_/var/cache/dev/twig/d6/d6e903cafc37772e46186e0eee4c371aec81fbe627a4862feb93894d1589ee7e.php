<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c5b98034d91a605cbcd57eb5808d8ee24946b4996cc764785faa4e3c17f2b0fc extends Twig_Template
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
        $__internal_fa80fe7ca3628818f4555fd7eb63fc75a618437b64018b90ee60398e68049b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa80fe7ca3628818f4555fd7eb63fc75a618437b64018b90ee60398e68049b49->enter($__internal_fa80fe7ca3628818f4555fd7eb63fc75a618437b64018b90ee60398e68049b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_9afffff5b34e744d07c4eecabe4321529722f4d41040080ecc93bd04505997b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afffff5b34e744d07c4eecabe4321529722f4d41040080ecc93bd04505997b1->enter($__internal_9afffff5b34e744d07c4eecabe4321529722f4d41040080ecc93bd04505997b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa80fe7ca3628818f4555fd7eb63fc75a618437b64018b90ee60398e68049b49->leave($__internal_fa80fe7ca3628818f4555fd7eb63fc75a618437b64018b90ee60398e68049b49_prof);

        
        $__internal_9afffff5b34e744d07c4eecabe4321529722f4d41040080ecc93bd04505997b1->leave($__internal_9afffff5b34e744d07c4eecabe4321529722f4d41040080ecc93bd04505997b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33b18959a108cd01ec203e264dadfc54d1af55a8311e3c9fc4ddc423d6b3b72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b18959a108cd01ec203e264dadfc54d1af55a8311e3c9fc4ddc423d6b3b72c->enter($__internal_33b18959a108cd01ec203e264dadfc54d1af55a8311e3c9fc4ddc423d6b3b72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_377b30546663d5a55c69c4adedd1a8731087af9cf152741f5e48a62e8864469f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377b30546663d5a55c69c4adedd1a8731087af9cf152741f5e48a62e8864469f->enter($__internal_377b30546663d5a55c69c4adedd1a8731087af9cf152741f5e48a62e8864469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_377b30546663d5a55c69c4adedd1a8731087af9cf152741f5e48a62e8864469f->leave($__internal_377b30546663d5a55c69c4adedd1a8731087af9cf152741f5e48a62e8864469f_prof);

        
        $__internal_33b18959a108cd01ec203e264dadfc54d1af55a8311e3c9fc4ddc423d6b3b72c->leave($__internal_33b18959a108cd01ec203e264dadfc54d1af55a8311e3c9fc4ddc423d6b3b72c_prof);

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
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
